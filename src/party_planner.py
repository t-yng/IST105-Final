import json
import sys


party_items = [
  {
    "id": 0,
    "name": "Cake",
    "value": 20,
  },
  {
    "id": 1,
    "name": "Balloons",
    "value": 21,
  },
  {
    "id": 2,
    "name": "Music System",
    "value": 10,
  },
  {
    "id": 3,
    "name": "Lights",
    "value": 5,
  },
  {
    "id": 4,
    "name": "Catering Service",
    "value": 8,
  },
  {
    "id": 5,
    "name": "DJ",
    "value": 3,
  },
  {
    "id": 6,
    "name": "Photo Booth",
    "value": 15,
  },
  {
    "id": 7,
    "name": "Tables",
    "value": 7,
  },
  {
    "id": 8,
    "name": "Chairs",
    "value": 12,
  },
  {
    "id": 9,
    "name": "Drinks",
    "value": 6,
  },
  {
    "id": 10,
    "name": "Party Hats",
    "value": 9,
  },
  {
    "id": 11,
    "name": "Streamers",
    "value": 18,
  },
  {
    "id": 12,
    "name": "Invitation Cards",
    "value": 4,
  },
  {
    "id": 13,
    "name": "Party Games",
    "value": 2,
  },
  {
    "id": 14,
    "name": "Cleaning Service",
    "value": 11,
  },
]

def pick_party_items(indices):
  return [item for item in party_items if item["id"] in indices]

def get_base_party_code(items):
  code = items[0]["value"]

  for item in items[1:]:
    code = code & item["value"]

  return code

def get_final_party_code(base_code):
  if base_code == 0:
    final_code = base_code + 5
    return (5, final_code, "Epic Party Incoming!")
  elif base_code > 5:
    final_code = base_code - 2
    return (-2, final_code, "Let's keep it classy!")
  else:
    final_code = base_code
    return (0, final_code, "Chill vibes only!")

indices = sys.argv[1].replace(" ", "").split(',')
indices = [int(i) for i in indices]

picked_party_items = pick_party_items(indices)

base_code = get_base_party_code(picked_party_items)
adjust_party_code_value, final_code, message = get_final_party_code(base_code)

output = {
  "party_items": party_items,
  "indices": ", ".join(list(map(str, indices))),
  "picked_items": ", ".join([item["name"] for item in picked_party_items]),
  "base_party_code": base_code,
  "adjusted_party_code": f"{base_code} {'+' if adjust_party_code_value > 0 else '-'} {abs(adjust_party_code_value)} = {final_code}",
  "final_party_code": final_code,
  "message": message,
}

print(json.dumps(output))

