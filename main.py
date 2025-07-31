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
    allow_origins=["*"],  # Adjust for production
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
        user_question = body.get("question")

        if not user_question:
            return {"answer": "Please ask a question."}

        response = client.chat.completions.create(
            model="gpt-4o",  # ✅ FIXED: Correct model name
            messages=[
                {"role": "system", "content": "You are BUD, a friendly expert in dispensary SEO and cannabis marketing. Keep answers short and helpful."},
                {"role": "user", "content": user_question},
            ],
            temperature=0.7,
        )

        reply = response.choices[0].message.content.strip()
        return {"answer": reply}

    except Exception as e:
        return {"error": str(e)}
