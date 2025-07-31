# main.py – FastAPI backend using OpenAI SDK >= 1.0.0

from fastapi import FastAPI, Request
from fastapi.middleware.cors import CORSMiddleware
from openai import OpenAI
import os
import logging

# Logging setup
logging.basicConfig(level=logging.DEBUG)
logger = logging.getLogger(__name__)

# Check if API key exists
openai_key = os.getenv("OPENAI_API_KEY")
if openai_key:
    logger.debug("OpenAI Key Present? True")
else:
    logger.error("OpenAI Key Missing!")
    raise ValueError("Missing OPENAI_API_KEY environment variable")

# OpenAI client setup
client = OpenAI(api_key=openai_key)

# FastAPI app
app = FastAPI()

# CORS settings
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],  # In production, restrict this
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

# Ask endpoint
@app.post("/ask")
async def ask_question(request: Request):
    data = await request.json()
    user_input = data.get("message", "")

    if not user_input:
        return {"response": "No message provided."}

    try:
        response = client.chat.completions.create(
            model="gpt-4",  # or "gpt-3.5-turbo"
            messages=[
                {"role": "system", "content": "You are a helpful AI assistant for cannabis dispensary SEO and marketing."},
                {"role": "user", "content": user_input}
            ],
            temperature=0.7
        )
        message = response.choices[0].message.content.strip()
        return {"re
