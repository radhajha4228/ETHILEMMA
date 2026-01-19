
body {
    font-family: 'Arial', 'Times New Roman', serif;
    margin: 10px;
    padding: 10px;
    background-color: #daeaf6;
    color: #333;
    transition: background-color 0.5s ease;
}

/* Navigation Bar */
.navbar {
    background-color: #9cadce;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.navbar a {
    float: left;
    display: block;
    color: #fff;
    text-align: left;
    padding: 12px 18px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.navbar a:hover {
    background-color: #7ec4cf;
    color: #fff;
}

/* Main Content */
.main-content {
    padding: 20px;
    background-color: #d1cfe2;
    border-radius: 10px;
    animation: fadeIn 1s ease-in;
}

/* Chapters Section */
.chapters {
    font-size: 24px;
    font-family: 'Times New Roman', serif;
    text-align: left;
    background-color: #d4afb9;
    color: #222;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
}

.chapters:hover {
    transform: scale(1.02);
}

/* Footer */
.footer {
    background-color: #9cadce;
    color: #fff;
    text-align: center;
    padding: 12px 0;
    position: fixed;
    width: 100%;
    bottom: 0;
    font-size: 14px;
    animation: slideUp 1s ease-in-out;
}

/* Animations */
@keyframes fadeIn {
    0% { opacity: 0; transform: translateY(10px); }
    100% { opacity: 1; transform: translateY(0); }
}

@keyframes slideUp {
    0% { transform: translateY(100%); }
    100% { transform: translateY(0); }
}