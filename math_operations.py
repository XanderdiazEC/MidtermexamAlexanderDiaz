#!/usr/bin/python3
import sys

# Read input data
input1 = float(sys.argv[1])
input2 = float(sys.argv[2])
operation = sys.argv[3]

# Perform operation
result = 0
if operation == "add":
    result = input1 + input2
elif operation == "sub":
    result = input1 - input2
elif operation == "mul":
    result = input1 * input2
elif operation == "div":
    if input2 != 0:
        result = input1 / input2
    else:
        print("Error: Division by zero")
        sys.exit(1)

# Apply additional conditions
if result > 100:
    result = result * 2
elif result < 0:
    result = result + 50

print(result)