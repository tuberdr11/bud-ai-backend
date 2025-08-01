# main.py
from dotenv import load_dotenv
load_dotenv()

from fastapi import FastAPI, Request
from fastapi.middleware.cors import CORSMiddleware
from fastapi.responses import JSONResponse
from dotenv import load_dotenv
import openai
import os

# ✅ Load environment variables from .env file
load_dotenv()

# ✅ Get OpenAI API Key
openai.api_key = os.getenv("OPENAI_API_KEY")

app = FastAPI()

# ✅ Allow frontend access from any origin (you can tighten this later)
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

@app.get("/")
def read_root():
    return {"message": "BUD is live"}

@app.post("/ask")
async def ask(request: Request):
    data = await request.json()
    prompt = data.get("prompt", "")

    try:
        response = openai.ChatCompletion.create(
            model="gpt-4",
            messages=[
                {"role": "system", "content": "You are a helpful assistant named BUD who specializes in cannabis SEO and marketing."},
                {"role": "user", "content": prompt}
            ]
        )
        print("🔍 OpenAI Response:", response)

        answer = response['choices'][0]['message']['content']
        return JSONResponse(content={"answer": answer})
    except Exception as e:
        print("❌ OpenAI Error:", str(e))
        return JSONResponse(content={"answer": "Sorry, I didn’t get that."})
