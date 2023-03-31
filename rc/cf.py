def illuminate_trophies(n, s):
    left = False
    right = False
    
    for i in range(n):
        if s[i] == "L":
            left = True
        elif s[i] == "R":
            right = True
            
        if left and right:
            return i+1
        
    return -1

t = int(input())

for i in range(t):
    n = int(input())
    s = input().strip()
    
    result = illuminate_trophies(n, s)
    
    print(result)
