import os
import json
import shutil
import re

def process_json_and_move_files(input_json: str, output_json: str):
    """Processes a JSON file, moves PHP files into subdirectories, and updates names in vulnerabilities."""

    # Load JSON data
    with open(input_json, "r", encoding="utf-8") as file:
        data = json.load(file)

    for item in data:
        name = item["name"]

        # If the name ends with ".php", move and rename it
        if name.endswith(".php"):
            new_folder = name[:-4]  # Remove '.php' to get the new folder name
            new_path = os.path.join(new_folder, "main.php")

            # Ensure the directory exists
            os.makedirs(new_folder, exist_ok=True)

            # Move the file if it exists
            if os.path.exists(name):
                shutil.move(name, new_path)
                print(f"✅ Moved {name} → {new_path}")
            else:
                print(f"⚠️ Warning: {name} does not exist!")

            # Update the "name" field in JSON
            item["name"] = new_folder

            # Update "vulnerabilities" list
            for vuln in item.get("vulnerabilities", []):
                if "source" in vuln:
                    vuln["source"] = re.sub(rf"{os.path.basename(name)}:(\d+)", r"main.php:\1", vuln["source"])
                if "sink" in vuln:
                    vuln["sink"] = re.sub(rf"{os.path.basename(name)}:(\d+)", r"main.php:\1", vuln["sink"])

    # Save the modified JSON to a new file
    with open(output_json, "w", encoding="utf-8") as file:
        json.dump(data, file, indent=2, ensure_ascii=False)

    print(f"✅ Modified JSON saved to {output_json}")

# Run the function with the given input and output file names
if __name__ == "__main__":
    process_json_and_move_files("extends/truth.json", "modified.json")  # Replace with actual filenames if needed