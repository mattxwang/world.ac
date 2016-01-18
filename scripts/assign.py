import csv

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

# Data -> CSV
with open(raw_input("OUTPUT FILE\n>"), 'wb') as out_file:
    wr = csv.writer(out_file, quoting=csv.QUOTE_ALL)
    wr.writerow(plen)

# print out the abnormalities
print abnormal
