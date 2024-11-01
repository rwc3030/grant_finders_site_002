import os

# Define the directory structure
directory_structure = {
    "project-root": {
        "public": [
            "index.php",
            "app.js",
            "styles.css"
        ],
        "src": {
            "database.php": None,
            "api": [
                "getData.php"
            ],
            "partials": [
                "header.php"
            ],
            "utils": [
                "websocket-server.php"
            ]
        },
        "config": [
            "config.php"
        ],
        "README.md": None
    }
}

def create_structure(base_path, structure):
    for name, content in structure.items():
        path = os.path.join(base_path, name)
        if isinstance(content, list):
            os.makedirs(path, exist_ok=True)
            for file_name in content:
                open(os.path.join(path, file_name), 'a').close()  # Create empty files
        elif isinstance(content, dict):
            os.makedirs(path, exist_ok=True)
            create_structure(path, content)
        else:
            open(path, 'a').close()  # Create empty file

if __name__ == "__main__":
    create_structure(".", directory_structure)
