<div align="center">
<h1 align="center">
<img src="https://raw.githubusercontent.com/PKief/vscode-material-icon-theme/ec559a9f6bfd399b82bb44393651661b08aaf7ba/icons/folder-markdown-open.svg" width="100" />
<br>une-pause-cafe
</h1>
<h3>◦ Coding breaks made caffeinated and collaborative!</h3>
<h3>◦ Developed with the software and tools listed below.</h3>

<p align="center">
<img src="https://img.shields.io/badge/PHP-777BB4.svg?style&logo=PHP&logoColor=white" alt="PHP" />
<img src="https://img.shields.io/badge/Docker-2496ED.svg?style&logo=Docker&logoColor=white" alt="Docker" />
<img src="https://img.shields.io/badge/GitHub%20Actions-2088FF.svg?style&logo=GitHub-Actions&logoColor=white" alt="GitHub%20Actions" />
<img src="https://img.shields.io/badge/Markdown-000000.svg?style&logo=Markdown&logoColor=white" alt="Markdown" />
</p>
<img src="https://img.shields.io/github/languages/top/qjoly/une-pause-cafe?style&color=5D6D7E" alt="GitHub top language" />
<img src="https://img.shields.io/github/languages/code-size/qjoly/une-pause-cafe?style&color=5D6D7E" alt="GitHub code size in bytes" />
<img src="https://img.shields.io/github/commit-activity/m/qjoly/une-pause-cafe?style&color=5D6D7E" alt="GitHub commit activity" />
<img src="https://img.shields.io/github/license/qjoly/une-pause-cafe?style&color=5D6D7E" alt="GitHub license" />
</div>

---

## 📒 Table of Contents
- [📒 Table of Contents](#-table-of-contents)
- [📍 Overview](#-overview)
- [⚙️ Features](#-features)
- [📂 Project Structure](#project-structure)
- [🧩 Modules](#modules)
- [🚀 Getting Started](#-getting-started)
- [🤝 Contributing](#-contributing)
- [📄 License](#-license)
- [👏 Acknowledgments](#-acknowledgments)

---


## 📍 Overview

The project is a web application that allows users to take a coffee break and read articles from selected categories. Thanks to the french website [journalduhacker.net](https://journalduhacker.net/), the application fetches the latest articles sorted by category from the RSS feed and displays a random article title with a link. The application is developed with PHP and Docker, allowing it to run on any platform with Docker installed. 

---

## ⚙️ Features

| Feature                | Description                                                                                               |
| ---------------------- | --------------------------------------------------------------------------------------------------------- |
| **⚙️ Architecture**     | The codebase follows a simple Apache PHP server architecture. The Dockerfile sets up an Apache server running PHP 8.0, with code in the 'src' directory accessible as the document root. |
| **📖 Documentation**   | No specific mention of documentation in the repository, limiting its evaluation.                            |
| **🔗 Dependencies**    | The codebase appears to have no external dependencies apart from the base Docker images for Apache and PHP. |
| **🧩 Modularity**      | The system's organization consists of multiple files with clear responsibilities. The main code resides in 'index.php', and the CSS files are modularity separated for different concerns. |
| **✔️ Testing**          | No information about testing strategies or tools, suggesting a lack of formalized testing in the codebase. |
| **⚡️ Performance**      | The system's performance mainly depends on the capabilities of the Apache server and the code optimization within 'index.php'. A full performance analysis cannot be done without further profiling. |
| **🔀 Version Control** | The codebase uses Git for version control, allowing collaboration, code history tracking, and ease of deployment to production or other environments. |

---


## 📂 Project Structure




---

## 🧩 Modules

<details closed><summary>Root</summary>

| File                                                                       | Summary                                                                                                                                                                                                                 |
| ---                                                                        | ---                                                                                                                                                                                                                     |
| [Dockerfile](https://github.com/qjoly/une-pause-cafe/blob/main/Dockerfile) | This code sets up an Apache server running on PHP 8.0. It copies the contents of the'src' directory to the document root of the server, making them accessible. The server listens on port 80 for incoming connections. |

</details>

<details closed><summary>Src</summary>

| File                                                                         | Summary                                                                                                                                                                                                                                                                                                                                                                                                                                |
| ---                                                                          | ---                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| [index.php](https://github.com/qjoly/une-pause-cafe/blob/main/src/index.php) | This code is an HTML page that allows users to take a coffee break and read an article from a selected category. It includes a form with radio buttons for category selection and a submit button to request an article. It uses PHP to handle form submissions, fetches RSS feed data based on the selected category, and displays a random article title with a link. The design includes custom stylesheets and background effects. |

</details>

<details closed><summary>Css</summary>

| File                                                                                       | Summary                                                                                                                                                                                                                                                                                                                                                          |
| ---                                                                                        | ---                                                                                                                                                                                                                                                                                                                                                              |
| [sanitize.css](https://github.com/qjoly/une-pause-cafe/blob/main/src/css/sanitize.css)     | The code is a minified version of the sanitize.css file. It applies a set of default styles to normalize the appearance and behavior of HTML elements across different browsers. Some key features include box-sizing, line-height adjustments, removing default margins on body and heading elements, and setting default styles for form elements.             |
| [styles.css](https://github.com/qjoly/une-pause-cafe/blob/main/src/css/styles.css)         | The code is a set of styles that resets default styles, centers elements, styles a logo, aligns radio buttons, styles a button and copyright text, creates a sticky footer, and adds animated effects to links.                                                                                                                                                  |
| [background.css](https://github.com/qjoly/une-pause-cafe/blob/main/src/css/background.css) | This code snippet is responsible for creating floating shapes animation on a given section of a webpage. The shapes are represented by list items with specified dimensions and position. They are animated to float upwards while rotating, gradually fading away, and changing their shape. The animation duration and delay can be customized for each shape. |

</details>

---

## 🚀 Getting Started


### 📦 Installation

1. Clone the une-pause-cafe repository:
```sh
git clone https://github.com/qjoly/une-pause-cafe
```

2. Change to the project directory:
```sh
cd une-pause-cafe
```

3. (method 1) Install webserver, php and copy files to webserver directory:

```sh
sudo apt update && \  
    sudo apt install apache2 php libapache2-mod-php
cp -r src/* /var/www/html/
```

4. (method 2) Build and run docker image:

```sh
docker-compose up --build
```

---

## 🤝 Contributing

Contributions are always welcome! Please follow these steps:
1. Fork the project repository. This creates a copy of the project on your account that you can modify without affecting the original project.
2. Clone the forked repository to your local machine using a Git client like Git or GitHub Desktop.
3. Create a new branch with a descriptive name (e.g., `new-feature-branch` or `bugfix-issue-123`).
```sh
git checkout -b new-feature-branch
```
4. Make changes to the project's codebase.
5. Commit your changes to your local branch with a clear commit message that explains the changes you've made.
```sh
git commit -m 'Implemented new feature.'
```
6. Push your changes to your forked repository on GitHub using the following command
```sh
git push origin new-feature-branch
```
7. Create a new pull request to the original project repository. In the pull request, describe the changes you've made and why they're necessary.
The project maintainers will review your changes and provide feedback or merge them into the main branch.

---

## 👏 Acknowledgments

> - `ℹ️  List any resources, contributors, inspiration, etc.`

---
