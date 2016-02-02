# Variables
data = {}
plen = {"A": [], "B": [], "C": [], "D": [], "E": [], "F": []}
abnormal = []
files = []

result = {}

final = {}
counter = {}
counter["pass_1"] = 0

# CSV -> Data
## Collect all files
for i in range(input("Amount of files\n>")):
	files.append(raw_input("INPUT FILE\n>"))

## Open all files
for file_name in files:
	for line in open(file_name):
		counter["pass_1"] += 1
		row = line.replace('"', '').split(",")
		data[(row[1] + " " + row[2] + ", " + row[3])] = [row[4], row[5], row[6], row[7]]

plenaries = {
	"A": ["Nuclear Proliferation", "DCT", [2, 3]],
	"B": ["Drones", "Old Gym", [2, 3]],
	"C": ["Environment", "Lecture Theatre", [1, 2]],
	"D": ["Gender Income Disparities", "Old Gym/Library", [1, 2]],
	"E": ["Refugee Crisis", "Laidlaw", [1, 2]],
	"F": ["China", "CC3", [2, 3]]
}

counter["pass_2"] = 0

# Parse data
for name, choice in data.iteritems():
	counter["pass_2"] += 1
	try:
		result[name] = [plenaries[choice[0]], plenaries[choice[1]], plenaries[choice[2]], choice[3]]

	# If the row is misformatted, or data is missing
	except Exception, e:
		result[name] = [['Gender Income Disparities', 'Old Gym/Library', [1, 2]], ['Refugee Crisis', 'Laidlaw', [1, 2]], ['China', 'CC3', [2, 3]], 'B']


counter["pass_3"] = 0
# Detect schedule conflicts
for name, plens in result.iteritems():
	counter["pass_3"] += 1
	try:
		# make list of plenary slots
		session = plens[0][2] + plens[1][2] + plens[2][2]
		# If they miss a slot (means they have a conflict)
		if ((1 not in session) or (2 not in session) or (3 not in session)):
			# reassign to their third to fourth
			result[name][2] = plenaries[data[name][3]]
			# print "RESOLVED: ",
			# print result[name]
		else:
			result[name].pop(3)

	# anomaly detection
	except Exception, e:
		print "\nFookin hell m8. IDK what's wrong with: " + name + "\n"

# print result

# Totally snapped right here and hardcoded the plenary arrangement
i_hate_python = {}

counter["pass_4"] = 0
# Legit schedule creation
for user, rooms in result.iteritems():
	counter["pass_4"] += 1
	session = [rooms[0][2], rooms[1][2], rooms[2][2]]

	timing = {}

	#12 12 23 || 23 23 12
	if session[0] == session[1]:
		timing = [rooms[0][0] + " in " + rooms[0][1], rooms[1][0] + " in " + rooms[1][1], rooms[2][0] + " in " + rooms[2][1]]
		#23 23 12
		if session[0] == [2,3]:
			timing[::-1]
	
	#12 23 12 || 23 12 23
	else:
		timing = [rooms[0][0] + " in " + rooms[0][1], rooms[2][0] + " in " + rooms[2][1], rooms[1][0] + " in " + rooms[1][1]]
		if session[0] == [2,3]:
			timing[::-1]

	i_hate_python[user] = timing

print i_hate_python
print counter
print len(i_hate_python)
# for key,value in i_hate_python.iteritems():
	# print [key] + value