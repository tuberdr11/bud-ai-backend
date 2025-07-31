from fastapi import FastAPI, Request
from fastapi.middleware.cors import CORSMiddleware
import openai, os
from embedder import find_relevant_chunks

app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

openai.api_key = os.getenv("OPENAI_API_KEY")
print("DEBUG: OpenAI Key Present?", bool(openai.api_key))  # <-- Debug line

@app.post("/ask")
async def ask_question(req: Request):
    data = await req.json()
    question = data.get("message", "")
    context = find_relevant_chunks(question)
    messages = [
        {"role": "system", "content": "You are BUD, the helpful AI from 420Optimized.com. Use only verified info from the site to answer questions clearly and helpfully."},
        {"role": "user", "content": f"{question}\n\nContext:\n{context}"}
    ]
    try:
        response = openai.ChatCompletion.create(
            model="gpt-3.5-turbo",
            messages=messages,
            temperature=0.7,
        )
        print("DEBUG: OpenAI Response:", response)  # <-- Debug line
        return {"reply": response.choices[0].message["content"]}
    except Exception as e:
        print("ERROR: OpenAI API failed with:", e)  # <-- Debug line
        return {"reply": "Sorry, I'm having trouble answering that right now."}
