<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize data
    $formData = [];
    foreach ($_POST as $key => $value) {
        $formData[$key] = htmlspecialchars($value);
    }

    // Prepare data to be written to file
    $data = "Mentorship Questionnaire:\n";
    $data .= "Name: {$formData['name']}\n";
    $data .= "Age: {$formData['age']}\n";
    $data .= "Preferred pronouns: {$formData['pronouns']}\n";
    $data .= "Communication methods: {$formData['communication_methods']}\n";
    $data .= "Specific tools or devices: {$formData['communication_tools']}\n";
    $data .= "Hobbies: {$formData['hobbies']}\n";
    $data .= "Passions: {$formData['passions']}\n";
    $data .= "Strengths: {$formData['strengths']}\n";
    $data .= "Skills to develop: {$formData['skills_to_develop']}\n";
    $data .= "Challenges: {$formData['challenges']}\n";
    $data .= "Sensory sensitivities: {$formData['sensory_sensitivities']}\n";
    $data .= "Support from mentor: {$formData['mentor_support']}\n";
    $data .= "Mentor assistance: {$formData['mentor_assistance']}\n";
    $data .= "Support system: {$formData['support_people']}\n";
    $data .= "Support influence: {$formData['support_influence']}\n";
    $data .= "Short-term goals: {$formData['short_term_goals']}\n";
    $data .= "Long-term goals: {$formData['long_term_goals']}\n";
    $data .= "Learning style: {$formData['learning_style']}\n";
    $data .= "Learning strategies: {$formData['learning_strategies']}\n";
    $data .= "Social comfort level: {$formData['social_comfort']}\n";
    $data .= "Social skills to develop: {$formData['social_skills']}\n";
    $data .= "Cultural factors: {$formData['cultural_factors']}\n";
    $data .= "Community influence: {$formData['community_influence']}\n";
    $data .= "Additional comments: {$formData['additional_comments']}\n";
    $data .= "----------------------\n";

    // Define file to store form data
    $file = 'mentorship_data.txt';

    // Attempt to save data to file
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        // Success message with iframe height adjustment
        echo "
        <link href=\"https://fonts.googleapis.com/css2?family=Marvel:wght@700&display=swap\" rel=\"stylesheet\">
        <h2 style=\"font-family:Marvel; text-align:center;\">Your info has been submitted!</h2>
        <center><a class=\"\" href=\"https://www.avautismcenter.com\" target=\"_PARENT\"><img style=\"width:150px;position:relative;top:0px;\" class=\"contactuspic\" src=\"https://www.avautismcenter.com/thumbsup.gif\"></a></center>
        <script>
            // Send message to parent window to adjust iframe height
            if (window.parent) {
                window.parent.postMessage({ type: 'setHeight', height: 250 }, 'https://www.avautismcenter.com');
            }
        </script>
        ";
    } else {
        // Error message if data save fails
        echo "Failed to save data.";
    }
} else {
    // Error message for invalid request
    echo "Invalid request.";
}
?>

