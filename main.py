# main.py
# BUD AI Backend - OpenAI 1.1 (GPT-4o Compatible)

from fastapi import FastAPI, Request
from fastapi.middleware.cors import CORSMiddleware
from openai import OpenAI
import os

app = FastAPI()

# Set up OpenAI client with your API key
client = OpenAI(api_key=os.getenv("OPENAI_API_KEY"))

# Allow frontend access (adjust for production)
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
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
        user_question = body.get("question", "").strip()

        if not user_question:
            return {"answer": "Please ask a question."}

        response = client.chat.completions.create(
            model="gpt-4o",  # Make sure your OpenAI account has access to this model
            messages=[
                {
                    "role": "system",
                    "content": "You are BUD, a friendly expert in dispensary SEO and cannabis marketing. You respond clearly, even to greetings, and help users with short, useful tips."
                },
                {"role": "user", "content": user_question},
            ],
            temperature=0.7,
            max_tokens=300
        )

        reply = response.choices[0].message.content.strip()

        if not reply:
            return {"answer": "Sorry, I didn’t get that. Can you try asking another way?"}

        return {"answer": reply}

    except Exception as e:
        return {"answer": f"Error: {str(e)}"}
