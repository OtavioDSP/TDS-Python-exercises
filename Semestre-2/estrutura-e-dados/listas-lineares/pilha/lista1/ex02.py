stack = []
for i in range(2):
    element = input("Insira um elemento: ")
    stack.append(element)
    print(stack)
stack.pop()
element = input("Insira um elemento: ")
stack.append(element)
stack.pop()
element = input("Insira um elemento: ")
stack.append(element)
print(stack)
