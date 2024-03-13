<?php

namespace App\Services;

use App\Models\AIModel;
use Illuminate\Support\Facades\Storage;

class AIModelService
{
    public function predict($inputData)
    {
        // Load the AI model from storage
        $modelPath = Storage::path('models/ai_model.pkl');
        $aiModel = new AIModel($modelPath);
        
        // Perform prediction using the AI model
        $output = $aiModel->predict($inputData);
        
        // Return the prediction output
        return $output;
    }
}
