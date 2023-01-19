require 'digest'

def sha256Crack(hash, c)
  alp = ('a'..'z').to_a

  str = ''
  while str == ''
    
    alp.each do |l1|
      alp.each do |l2|
        alp.each do |l3|
          alp.each do |l4|
            # alp.each do |l5|
            #   alp.each do |l6|
            #     alp.each do |l7|
            #       alp.each do |l8|
            #         alp.each do |l9|
            #           alp.each do |l10|
            #             Digest::SHA256.digest(l1+l2+l3+l4+l5+l6+l7+l8+l9+l10) == hash ? str = l1+l2+l3+l4+l5+l6+l7+l8+l9+l10 : ''
            #           end
            #         end
            #       end
            #     end
            #   end
            # end
            puts l1+l2+l3+l4
            Digest::SHA256.hexdigest(l1+l2+l3+l4) == hash ? str = l1+l2+l3+l4 : ''
          end
        end
      end
    end
  end

  str
end

print sha256Crack('b8c49d81cb795985c007d78379e98613a4dfc824381be472238dbd2f974e37ae', 'hash')