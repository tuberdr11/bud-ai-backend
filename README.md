# BUD AI Backend for 420Optimized

This is the FastAPI backend powering the BUD AI assistant.

## Run locally
1. Add `.env` with your OpenAI key:
```
OPENAI_API_KEY=sk-...
```

2. Install dependencies:
```
pip install -r requirements.txt
```

3. Start the server:
```
uvicorn main:app --host 0.0.0.0 --port 8000
```

## Deploy on Render
Use `render.yaml` for 1-click deploy. Add `OPENAI_API_KEY` in the environment variables section.
