import os

def create_empty_file(file_path):
    """Create an empty file at the specified path."""
    open(file_path, 'a').close()

def create_structure(base_path, structure):
    """Recursively create directories and files based on the structure."""
    for name, content in structure.items():
        path = os.path.join(base_path, name)
        if isinstance(content, list):
            os.makedirs(path, exist_ok=True)
            for file_name in content:
                create_empty_file(os.path.join(path, file_name))
        elif isinstance(content, dict):
            os.makedirs(path, exist_ok=True)
            create_structure(path, content)
        else:
            create_empty_file(path)

if __name__ == "__main__":
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
    create_structure(".", directory_structure)
