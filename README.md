
# Insertion Sort Aşamaları

[22,27,16,2,18,6] - (n)

[2|,27,16,22,18,6] - (n-1)

[2,6|,16,22,18,27] - (n-2)

[2,6,16|,18,22,27] - (n-3)

# Big O Notation Gösterimi

Worst Case: O(n²) = n+(n-1)+(n-2)....+1

Average Case: O(n²)

Best Case: O(n)

# Time Complexity

Worst Case: [27,22,18,16,6,2]

Best Case: [2,6,16,18,22,27]

# 18 Sayısının Case Durumu

Dizimiz küçükten büyüğe sıralandıktan sonra [2,6,16,18,22,27] şeklini alır ve 18 sayısı bu dizinin ortanca değeridir. Yani average case diyebiliriz.

# [7,3,5,8,2,9,4,15,6] Dizisinin İlk 4 Adımı

[2|,3,5,8,7,9,4,15,6]

[2,3|,5,8,7,9,4,15,6]

[2,3,4|,8,7,9,5,15,6]

[2,3,4,5|,7,9,8,15,6]

www.patika.dev