def getArr(i, p, n)
  arr = []
  100.times do |t|  
    (i**t % p) == n ? arr << t : ""
  end
  arr
end

def brute(i, p, n1, n2)
  arr1 = getArr(i, p, n1)
  print arr1
  arr2 = getArr(i, p, n2)
  res1 = []
  res2 = []
  arr1.each do |e1|
    res1 << n2**e1%p
  end
  arr2.each do |e2|
    res2 << n1**e2%p
  end
  "\n\nChave Privada: #{res1[0]}\n\n"
end

print brute(5, 23, 8, 19)