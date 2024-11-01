def read_file(file_path):
    """Read the file and return its lines."""
    with open(file_path, 'r') as file:
        return file.readlines()

def parse_features(lines):
    """Parse the lines to find incomplete features."""
    incomplete_features = []
    current_feature = None

    for line in lines:
        if line.startswith('- **Feature'):
            if current_feature and not current_feature['complete']:
                incomplete_features.append(current_feature)
            current_feature = {
                'name': line.strip(),
                'complete': False
            }
        elif line.startswith('  - [ ]'):
            current_feature['complete'] = False
        elif line.startswith('  - [x]'):
            current_feature['complete'] = True

    if current_feature and not current_feature['complete']:
        incomplete_features.append(current_feature)

    return incomplete_features

def check_incomplete_features(file_path):
    """Check for incomplete features in the specified file."""
    lines = read_file(file_path)
    return parse_features(lines)

if __name__ == "__main__":
    features = check_incomplete_features('development_checklist.md')
    if features:
        print("Next feature to work on:")
        print(features[0]['name'])
    else:
        print("All features are complete.")
