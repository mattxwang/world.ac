# Refugee plenaries is 1-2
# A plenaries must happen twice in a row

# Variables
data = {}
plen = {"A": [], "B": [], "C": [], "D": [], "E": [], "F": []}
abnormal = []

# CSV -> Data
for line in open(raw_input("INPUT FILE\n>")):
	row = line.split(",")
	data[(row[1] + " " + row[2])] = [row[4], row[5], row[6], row[7]]

# Parse data
for name, choice in data.iteritems():
	try:
		plen[choice[0].capitalize()].append(name)
		plen[choice[1].capitalize()].append(name)
		plen[choice[2].capitalize()].append(name)
		plen[choice[3].capitalize()].append(name)

	# If the row is misformatted, or data is missing
	except Exception, e:
		abnormal.append(name)

print plen

# print amount of people in each plenary
print [(key + ": " + str(len(value))) for key,value in plen.iteritems()]

# print out the abnormalities
print abnormal