# main.py
# BUD AI Backend - OpenAI 1.2 (Stable with response fallback)

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
            return {"answer": "Please ask a question about dispensary SEO or 420 marketing."}

        response = client.chat.completions.create(
            model="gpt-4o",  # Make sure your OpenAI key has access to gpt-4o
            messages=[
                {
                    "role": "system",
                    "content": "You are BUD, a friendly expert in dispensary SEO and cannabis marketing. You help users with short, smart, and clear answers about 420 marketing. Respond helpfully even to greetings."
                },
                {"role": "user", "content": user_question},
            ],
            temperature=0.7,
            max_tokens=300
        )

        reply = response.choices[0].message.content.strip()

        # Handle blank or confusing output
        if not reply or reply.lower() in ["", "i don't know", "sorry", "none"]:
            return {
                "answer": "Sorry, I didn’t get that. Try asking about local SEO, Google Maps rankings, or cannabis marketing tips."
            }

        return {"answer": reply}

    except Exception as e:
        return {"answer": f"BUD had a hiccup: {str(e)}"}
