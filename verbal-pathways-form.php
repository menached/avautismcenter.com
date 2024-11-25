<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Marvel:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentorship Questionnaire</title>
    <style>
        /* Base styling */
        body {
            font-family: Poppins, Poppins;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #333;
        }

        /* Form container styling */
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
            background-color: white;
        }

        /* Header styles */
        h2 {
            font-family: 'Marvel', Poppins;
            color: #0044cc;
        }

        h3 {
            color: #ff6600;
        }

        /* Label styling */
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }

        /* Input, select, and textarea styling */
        input[type="text"], input[type="number"], select, textarea {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333;
            background-color: #fff;
        }

        textarea {
            resize: vertical;
            padding-right: 10px;
            max-width: 90%;
        }

        /* Submit button styling */
        input[type="submit"] {
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        h3 {font-family:Marvel;}
        label {font-family:Marvel;}
    </style>
</head>
<body>
    <div class="container">
        <form action="save_data.php" method="POST" onsubmit="notifyParentToScroll();">
            <h2 style=text-align:center;>Mentorship Questionnaire</h2>

            <h3 style="font-family:Marvel">Personal Information</h3>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" max="120" required>

            <label for="pronouns">Preferred pronouns:</label>
            <select id="pronouns" name="pronouns">
                <option value="he/him">He/Him</option>
                <option value="she/her">She/Her</option>
                <option value="they/them">They/Them</option>
                <option value="other">Other</option>
            </select>

            <label for="communication_methods">Preferred communication methods (e.g., assistive technology, sign language):</label>
            <textarea id="communication_methods" name="communication_methods" rows="3"></textarea>

            <label for="communication_tools">Specific tools or devices for communication:</label>
            <textarea id="communication_tools" name="communication_tools" rows="3"></textarea>

            <h3>Interests and Passions</h3>
            <label for="hobbies">Favorite hobbies or activities:</label>
            <textarea id="hobbies" name="hobbies" rows="3"></textarea>

            <label for="passions">Topics or activities you're passionate about:</label>
            <textarea id="passions" name="passions" rows="3"></textarea>

            <h3>Strengths and Skills</h3>
            <label for="strengths">What do you consider your strengths?</label>
            <textarea id="strengths" name="strengths" rows="3"></textarea>

            <label for="skills_to_develop">Specific skills you'd like to develop:</label>
            <textarea id="skills_to_develop" name="skills_to_develop" rows="3"></textarea>

            <h3>Challenges and Sensitivities</h3>
            <label for="challenges">Challenges often faced:</label>
            <textarea id="challenges" name="challenges" rows="3"></textarea>

            <label for="sensory_sensitivities">Specific sensory sensitivities or triggers:</label>
            <textarea id="sensory_sensitivities" name="sensory_sensitivities" rows="3"></textarea>

            <h3>Support Needs</h3>
            <label for="mentor_support">Types of support needed from a mentor:</label>
            <textarea id="mentor_support" name="mentor_support" rows="3"></textarea>

            <label for="mentor_assistance">How a mentor can assist with daily life or goals:</label>
            <textarea id="mentor_assistance" name="mentor_assistance" rows="3"></textarea>

            <h3>Family and Support System</h3>
            <label for="support_people">Key people in your support system (family, friends, professionals):</label>
            <textarea id="support_people" name="support_people" rows="3"></textarea>

            <label for="support_influence">How they support you in daily life:</label>
            <textarea id="support_influence" name="support_influence" rows="3"></textarea>

            <h3>Goals and Aspirations</h3>
            <label for="short_term_goals">Important short-term goals (next few months):</label>
            <textarea id="short_term_goals" name="short_term_goals" rows="3"></textarea>

            <label for="long_term_goals">Long-term goals (next few years):</label>
            <textarea id="long_term_goals" name="long_term_goals" rows="3"></textarea>

            <h3>Learning Style</h3>
            <label for="learning_style">Preferred learning style (e.g., visual, auditory, hands-on):</label>
            <select id="learning_style" name="learning_style">
                <option value="visual">Visual</option>
                <option value="auditory">Auditory</option>
                <option value="hands-on">Hands-on</option>
                <option value="other">Other</option>
            </select>

            <label for="learning_strategies">Specific strategies for understanding new concepts:</label>
            <textarea id="learning_strategies" name="learning_strategies" rows="3"></textarea>

            <h3>Social Skills</h3>
            <label for="social_comfort">Comfort level in social situations:</label>
            <select id="social_comfort" name="social_comfort">
                <option value="very comfortable">Very Comfortable</option>
                <option value="comfortable">Comfortable</option>
                <option value="neutral">Neutral</option>
                <option value="uncomfortable">Uncomfortable</option>
                <option value="very uncomfortable">Very Uncomfortable</option>
            </select>

            <label for="social_skills">Social skills you'd like to work on:</label>
            <textarea id="social_skills" name="social_skills" rows="3"></textarea>

            <h3>Cultural and Community Context</h3>
            <label for="cultural_factors">Important cultural or community factors:</label>
            <textarea id="cultural_factors" name="cultural_factors" rows="3"></textarea>

            <label for="community_influence">How they influence your identity and experiences:</label>
            <textarea id="community_influence" name="community_influence" rows="3"></textarea>

            <h3>Additional Comments</h3>
            <label for="additional_comments">Additional information to help in mentoring or daily life:</label>
            <textarea id="additional_comments" name="additional_comments" rows="3"></textarea>

            <input type="submit" value="Submit">
        </form>

        <script>
            // Notify parent to scroll to top after form submission
            function notifyParentToScroll() {
                if (window.parent) {
                    window.parent.postMessage({ type: 'scrollToTop' }, "https://www.avautismcenter.com");
                }
            }

            // Adjust iframe height on load
            window.addEventListener("load", function() {
                const height = document.body.scrollHeight;
                window.parent.postMessage({ type: "setHeight", height: height }, "https://www.avautismcenter.com");
            });
        </script>
    </div>
</body>
</html>

