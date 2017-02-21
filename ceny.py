import re
from os import listdir
count = 0
folder = "typove-domy"
folderNew = "typove-domy-new"
filename = "typove-domy/bungalov-132b-4-kk"
# filename = "includes/typove-domy"
files = listdir(folder)
print len(files)
for mFile in files:
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

print count
