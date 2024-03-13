from flask import Flask, request, jsonify
import pickle

app = Flask(__name__)

# Load the saved model
with open('model.pkl', 'rb') as f:
    model = pickle.load(f)

# Define the API endpoint
@app.route('/predict', methods=['POST'])
def predict():
    # Get the input data from the request
    input_data = request.get_json()

    # Use the model to make a prediction
    prediction = model.predict(input_data)

    # Return the prediction as a JSON object
    return jsonify(prediction.tolist())

if __name__ == '__main__':
    app.run(debug=True)
