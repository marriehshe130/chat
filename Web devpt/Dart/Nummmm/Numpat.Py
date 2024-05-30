import numpy as np
a = np.arange(2,72,6)
a = a.reshape(3,4)
print('Original array is:')
print(a)
print('\n')
print('Modified array is:')
for x in np.nditer(a):
   print(x)

