
# Phishing Website Detection

This project aims to develop a web browser extension for detecting phishing websites using machine learning techniques. The extension analyzes the structure and content of a given website to determine its safety level, helping users avoid potential security threats while browsing the internet.



## Features

Real-time Analysis: Instantly assesses the safety of a website before interacting with it.

Machine Learning Classification: Utilizes a trained Random Forest classifier to distinguish between safe and phishing websites.

User-Friendly Interface: Offers a simple and intuitive interface for seamless integration into the browsing experience.



## Installation

1. Clone the repository:
   
   git clone https://github.com/rocks-D-XEBEC/phishing_websites_detection.git
   

2. Install the necessary dependencies:
   
   pip install -r requirements.txt
  

3. Load the extension in Google Chrome:
   - Open Chrome and navigate to `chrome://extensions`.
   - Enable "Developer mode" in the top right corner.
   - Click on "Load unpacked" and select the `extension` directory from the cloned repository.

## Usage

1. Once the extension is installed, you'll see its icon in the Chrome toolbar.
2. Click on the icon to analyze the safety of the current website.
3. The extension will display whether the website is safe or potentially phishing.
4. Exercise caution when interacting with flagged websites and consider avoiding them altogether.

## Contributing

Contributions are welcome! If you'd like to enhance this project or fix any issues, feel free to open a pull request. Please ensure that your PR follows the project's coding conventions and includes relevant tests.

To add the use of XAMPP server and instructions on how to install and set it up in your README.md file, you can include the following:

### XAMPP Server Setup

XAMPP is a free and open-source cross-platform web server solution stack package developed by Apache Friends. It includes Apache HTTP Server, MySQL database, and interpreters for scripts written in PHP and Perl. Follow these steps to install and set up XAMPP for hosting the PHP server script in this project:

#### Installation Steps:

1. Download XAMPP: Visit the official [XAMPP website](https://www.apachefriends.org/index.html) and download the appropriate version of XAMPP for your operating system (Windows, macOS, Linux).

2. Run the Installer: Run the downloaded XAMPP installer and follow the on-screen instructions to install XAMPP on your system. 

3. Start the XAMPP Control Panel: Once the installation is complete, launch the XAMPP Control Panel from the Start Menu (Windows) or Applications folder (macOS).

4. Start Apache and MySQL Services: In the XAMPP Control Panel, start the Apache and MySQL services by clicking on the "Start" buttons next to their respective names. 

5. Verify Installation: Open your web browser and navigate to `http://localhost`. If XAMPP is installed correctly, you should see the XAMPP dashboard indicating that Apache and MySQL are running.

#### Project Setup:

6. Clone Repository: Clone or download this project repository to your local machine.

7. Move Project Files: Move the project files (PHP scripts) to the `htdocs` directory inside the XAMPP installation directory. This directory is typically located at `C:\xampp\htdocs` on Windows, `/Applications/XAMPP/htdocs` on macOS, and `/opt/lampp/htdocs` on Linux.

8. Access Project: Once the project files are moved to the `htdocs` directory, you can access them through your web browser by navigating to `http://localhost/project_name`, where `project_name` is the name of the directory containing your project files.
   
9.  Go to ```chrome://extensions```, activate developer mode, click on load unpacked and select the 'Extension' folder from our project.
Now, you can go to any web page and click on the extension in the top right panel of your Chrome window. Click on the 'Safe of not?' button and wait for a second for the result.




  
### Usage of XAMPP Server

XAMPP provides a convenient way to set up a local web server environment for hosting PHP applications. It allows you to develop and test web applications locally before deploying them to a production server. With XAMPP, you can easily run PHP scripts, interact with databases using MySQL, and test web applications without the need for an internet connection.

By following the installation and setup instructions provided above, you can quickly get XAMPP up and running on your system and host the PHP server script required for this project. XAMPP simplifies the process of creating a local development environment, making it an essential tool for web developers and software engineers.

