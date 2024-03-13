<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\AIModelService;

class AIController extends Controller
{
    public function index(){
        return view('backend.aimodel');
    }


    public function predict(Request $request, AIModelService $aiModelService)
    {
        // Retrieve the input data from the request
        $inputData = $request->all();
        
        // Call the AI model service to generate the output
        $output = $aiModelService->predict($inputData);
        
        // Return the output as a JSON response
        return response()->json($output);
        // Get input data from the API request
$inputData = json_decode(file_get_contents('php://input'), true);

// Pass input data to AI model to get prediction output
$predictionOutput = $aiModel->predict($inputData);

// Convert prediction output to JSON format
$predictionOutputJson = json_encode($predictionOutput);

// Set headers for JSON response
header('Content-Type: application/json');

// Return prediction output as JSON response
echo $predictionOutputJson;

    }
}

