from fastapi import FastAPI, Request
from fastapi.middleware.cors import CORSMiddleware
from openai import OpenAI
import os
import logging

logging.basicConfig(level=logging.DEBUG)
logger = logging.getLogger(__name__)

openai_key = os.getenv("OPENAI_API_KEY")
if openai_key:
    logger.debug("OpenAI Key Present? True")
else:
    logger.error("OpenAI Key Missing!")
    raise ValueError("Missing OPENAI_API_KEY environment variable")

client = OpenAI(api_key=openai_key)

app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

@app.post("/ask")
async def ask_question(request: Request):
    data = await request.json()
    user_input = data.get("message", "")

    if not user_input:
        return {"response": "No message provided."}

    try:
        response = client.chat.completions.create(
            model="gpt-4",
            messages=[
                {"role": "system", "content": "You are a helpful AI assistant for cannabis dispensary SEO and marketing."},
                {"role": "user", "content": user_input}
            ],
            temperature=0.7
        )
        message = response.choices[0].message.content.strip()
        return {"response": message}
    except Exception as e:
        logger.error(f"OpenAI API error: {e}")
        return {"response": "Sorry, I'm having trouble answering that right now."}
