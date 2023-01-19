require 'prime'

def decrypt(p, q, d, encrypt, text)
  n = 323
  z = ((p-1)*(q-1))
  e = []
  result = []
  Prime.take(100).each do |prime|
    prime*d % z == 1 ? e << prime : ''
  end

  unless encrypt == false
    text.bytes.each do |t|
      result << ((t**d) % n) 
    end
  else
    text.split(' ').each do |t|
      result << ((t.to_i**e[0]) % n).chr
    end
  end
  result.join(" ")
end

print decrypt(17, 19, 29, false, '287 169 243 318 060')