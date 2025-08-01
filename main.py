# main.py
# BUD AI Backend — v1.3 Stable (GPT-4o, full logging, fallback support)

from fastapi import FastAPI, Request
from fastapi.middleware.cors import CORSMiddleware
from openai import OpenAI
import os

# Initialize FastAPI app
app = FastAPI()

# Allow all CORS origins (for frontend compatibility)
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# Load OpenAI client (uses your env var OPENAI_API_KEY)
client = OpenAI(api_key=os.getenv("OPENAI_API_KEY"))

@app.get("/")
async def root():
    return {"message": "BUD backend is live."}

@app.post("/ask")
async def ask(request: Request):
    try:
        data = await request.json()
        question = data.get("question", "").strip()

        if not question:
            return {"answer": "Please type a question for BUD to answer."}

        print("🟢 New question received:", question)

        response = client.chat.completions.create(
            model="gpt-4o",
            messages=[
                {
                    "role": "system",
                    "content": "You are BUD, a helpful, friendly assistant for dispensary owners. Your job is to explain cannabis SEO, digital marketing, and local visibility strategies in a simple, professional way."
                },
                {
                    "role": "user",
                    "content": question
                }
            ],
            temperature=0.7,
            max_tokens=300
        )

        reply = response.choices[0].message.content.strip() if response.choices else ""

        print("🧠 GPT Reply:", reply)

        if not reply:
            return {"answer": "BUD didn’t catch that. Try asking again about SEO, visibility, or dispensary marketing."}

        return {"answer": reply}

    except Exception as e:
        print("❌ ERROR:", str(e))
        return {"answer": "Oops! BUD had a problem. Try again in a moment."}
