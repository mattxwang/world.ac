for line in open(raw_input("INPUT FILE\n>")):
	row = line.split(",")
	name = row[1].split("@")[0].split(".")
	print (",").join([row[0], row[1], '"' + name[0].strip('"').capitalize() + '"', '"' + name[1].capitalize() + '"', '"Upper Canada College"', row[5], row[6], row[7], row[8].strip("\n")])