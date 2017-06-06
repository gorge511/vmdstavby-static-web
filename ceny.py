import re
from os import listdir
count = 0
count_include = 0
folder = "typove-domy"
folderNew = "typove-domy-new"
filename = "includes/typove-domy" # .php
files = listdir(folder)
number_of_houses = len(files)

for mFile in files:
    print mFile
    if mFile == ".DS_Store":
    	print "Skipping file."
        continue
    with open(folderNew + "/" + mFile, "w") as f_new:
        with open(folder + "/" + mFile, "r") as f:
            for line in f:
                res = re.search("od ([0-9.]+),-", line)
                if res:
                    num = int(res.group(1).replace(".", ""))
                    num *= 1.1
                    num = "{0:,}".format(int(num)).replace(",", ".")

                    print line.replace(res.group(1), num)
                    f_new.write(line.replace(res.group(1), num))
                    count += 1
                else:
                    f_new.write(line)

with open(filename + "-new.php", "w") as f_new:
        with open(filename + ".php", "r") as f:
            for line in f:
                res = re.search("od ([0-9.]+),-", line)
                if res:
                    num = int(res.group(1).replace(".", ""))
                    num *= 1.1
                    num = "{0:,}".format(int(num)).replace(",", ".")

                    print line.replace(res.group(1), num)
                    f_new.write(line.replace(res.group(1), num))
                    count_include += 1
                else:
                    f_new.write(line)

print "Number of houses in folder " + folder + ": " + str(number_of_houses)
print "Number of changes in house's files: " + str(count)
print "Number of changes in include file: " + str(count_include)

if number_of_houses != (count * 2) or number_of_houses != (count_include * 2):
	print "There is some replacement error. Maybe some extra replacement in house's file."