# main.py
from fastapi import FastAPI, Request
from fastapi.middleware.cors import CORSMiddleware
import os
from openai import OpenAI
from dotenv import load_dotenv
from embedder import find_relevant_chunks

# Load environment variables from .env
load_dotenv()

# Initialize OpenAI client
client = OpenAI(api_key=os.getenv("OPENAI_API_KEY"))

# Set up FastAPI app
app = FastAPI()

# Allow frontend access
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_methods=["*"],
    allow_headers=["*"],
)

# Define the /ask route
@app.post("/ask")
async def ask(request: Request):
    body = await request.json()
    user_question = body.get("question", "")

    try:
        # Get relevant context from embedder
        context = find_relevant_chunks(user_question)

        response = client.chat.completions.create(
            model="gpt-4o",  # or "gpt-3.5-turbo"
            messages=[
                {"role": "system", "content": f"You are BUD, a helpful cannabis shopping assistant. Use this context to answer questions: {context}"},
                {"role": "user", "content": user_question}
            ]
        )

        return {"answer": response.choices[0].message.content}

    except Exception as e:
        return {"answer": f"Oops! BUD had a problem: {str(e)}"}
