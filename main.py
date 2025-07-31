from fastapi import FastAPI, Request
from fastapi.middleware.cors import CORSMiddleware
from fastapi.responses import JSONResponse
import openai
import os

app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

openai.api_key = os.getenv("OPENAI_API_KEY")

@app.post("/ask")
async def ask_question(req: Request):
    try:
        data = await req.json()
        question = data.get("message", "")
        if not question:
            return JSONResponse(content={"reply": "No question received."}, status_code=400)

        messages = [
            {
                "role": "system",
                "content": "You are BUD, the helpful AI from 420Optimized.com. Use only verified info from the site to answer questions clearly and helpfully.",
            },
            {
                "role": "user",
                "content": question,
            },
        ]

        response = openai.ChatCompletion.create(
            model="gpt-3.5-turbo",
            messages=messages,
            temperature=0.7,
        )

        reply = response.choices[0].message["content"].strip()

        return JSONResponse(content={"reply": reply})

    except Exception as e:
        return JSONResponse(content={"reply": f"Error: {str(e)}"}, status_code=500)
