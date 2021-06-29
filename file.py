file1 = open('sample.txt','r')
file2 = open('sample_c.txt','w')

for line in file1.readlines():
    if not (line.startswith('#')):
        print(line)
        file2.write(line)
        
file2.close()
file1.close()