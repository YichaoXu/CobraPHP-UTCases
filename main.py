import json

def count_entries(json_file):
    with open(json_file, "r", encoding="utf-8") as f:
        data = json.load(f)

    total_objects = len(data)
    total_true_positives = sum(len(entry.get("true_positives", [])) for entry in data)
    total_false_positives = sum(len(entry.get("false_positives", [])) for entry in data)

    print(f"📊 JSON 统计信息：")
    print(f"🔹 对象总数: {total_objects}")
    print(f"✅ True Positives 总数: {total_true_positives}")
    print(f"❌ False Positives 总数: {total_false_positives}")

    return {
        "total_objects": total_objects,
        "total_true_positives": total_true_positives,
        "total_false_positives": total_false_positives
    }

# 运行统计脚本
json_file = "patterns.json"  # 你的 JSON 文件名
count_entries(json_file)