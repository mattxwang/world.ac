people = {}

data = list("ABCCBABCBCBBABBABBBBBBCBBABBCBABBBBCBACBBBABBCABBBBBBBBBCCBBBAAAAABBBABCBC")

for letter in ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w']:
	people[letter] = [data.pop(), data.pop(), data.pop()]

print people