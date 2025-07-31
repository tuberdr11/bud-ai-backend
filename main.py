# main.py
# BUD AI Backend - OpenAI 1.0+ Compatible

from fastapi import FastAPI, Request
from fastapi.middleware.cors import CORSMiddleware
from openai import OpenAI
import os

app = FastAPI()

# Set up OpenAI client
client = OpenAI(api_key=os.getenv("OPENAI_API_KEY"))

# Allow frontend access
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],  # Update this to your domain in production
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

@app.get("/")
async def root():
    return {"message": "BUD AI backend is live."}

@app.post("/ask")
async def ask(request: Request):
    try:
        body = await request.json()
        user_question = body.get("message")
        if not user_question:
            return {"reply": "Please ask a question."}

        response = client.chat.completions.create(
            model="gpt-4",  # Or use "gpt-3.5-turbo" if desired
            messages=[
                {
                    "role": "system",
                    "content": (
                        "You are BUD, a friendly expert in dispensary SEO and cannabis marketing. "
                        "Keep answers short, clear, and helpful. Speak in a casual, upbeat tone."
                    ),
                },
                {"role": "user", "content": user_question},
            ],
            temperature=0.7,
        )

        reply = response.choices[0].message.content.strip()
        return {"reply": reply}

    except Exception as e:
        return {"reply": f"Sorry, there was an error: {str(e)}"}
