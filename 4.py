def groupNumber(angka):
    data = ''.join(x for x in angka if x.isdigit())
    print( data[:3] + "-" + data[3:6] + '-' + data[6:9] + '-' + data[9:12] + '-' + data[12:14] + '-' + data[14:16] ) 

groupNumber('993141 -1 1323 14-232')