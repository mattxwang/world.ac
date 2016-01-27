# Variables
data = {}
plen = {"A": [], "B": [], "C": [], "D": [], "E": [], "F": []}
abnormal = []
files = []

result = {}

final = {}

# CSV -> Data
## Collect all files
for i in range(input("Amount of files\n>")):
	files.append(raw_input("INPUT FILE\n>"))

## Open all files
for file_name in files:
	for line in open(file_name):
		row = line.replace('"', '').split(",")
		data[(row[1] + " " + row[2])] = [row[4], row[5], row[6], row[7]]

plenaries = {
	"A": ["Nuclear Proliferation", "DCT", [2, 3]],
	"B": ["Drones", "Old Gym", [2, 3]],
	"C": ["Environment", "Lecture Theatre", [1, 2]],
	"D": ["Gender Income Disparities", "Old Gym/Library", [1, 2]],
	"E": ["Refugee Crisis", "Laidlaw", [1, 2]],
	"F": ["China", "CC3", [2, 3]]
}

# Parse data
for name, choice in data.iteritems():
	try:
		result[name] = [plenaries[choice[0]], plenaries[choice[1]], plenaries[choice[2]]]

	# If the row is misformatted, or data is missing
	except Exception, e:
		abnormal.append(name)

# Detect schedule conflicts
for name, plens in result.iteritems():
	try:
		# make list of plenary slots
		session = plens[0][2] + plens[1][2] + plens[2][2]
		# If they miss a slot (means they have a conflict)
		if ((1 not in session) or (2 not in session) or (3 not in session)):
			# reassign to their third to fourth
			result[name][2] = plenaries[data[name][3]]
			# print "RESOLVED: ",
			# print result[name]

	# anomaly detection
	except Exception, e:
		print "\nFookin hell m8. IDK what's wrong with: " + name + "\n"
		# Execute the anomaly
		result.pop(name)

print result


# Legit schedule creation
for name in result:
	session = [result[name][0][2], result[name][1][2], result[name][2][2]]


	if session[0][0] in (session[1] + session[2]):
		session[0].pop(0)
	else:
		session[0].pop(1)

	if session[1][0] in (session[0] + session[2]):
		session[1].pop(0)
	else:
		session[1].pop(1)

	if session[2][0] in (session[0] + session[1]):
		session[2].pop(0)
	else:
		session[2].pop(1)

	# Give session-state back
	result[name][0][2] = session[0][0]
	result[name][1][2] = session[1][0]
	result[name][2][2] = session[2][0]

print "#########################"

#DOUBLE CHECK
# Detect schedule conflicts
# Detect schedule conflicts
for name, plens in result.iteritems():
	try:
		# make list of plenary slots
		session = plens[0][2] + plens[1][2] + plens[2][2]
		# If they miss a slot (means they have a conflict)
		if ((1 not in session) or (2 not in session) or (3 not in session)):
			# reassign to their third to fourth
			result[name][2] = plenaries[data[name][3]]
			# print "RESOLVED: ",
			# print result[name]

	# anomaly detection
	except Exception, e:
		print "\nFookin hell m8. IDK what's wrong with: " + name + "\n"
		# Execute the anomaly
		result.pop(name)

print result