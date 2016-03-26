# Farsi2LatinUTF8Digits
Converting UTF-8 Farsi/Arabic digits in a string to Latin digits.

PHP intval function returns zero for strings containig Farsi/Arabic digits (i.e. ۰ ۱ ۲ ۳ ۴ ۵ ۶ ۷ ۸ ۹) . Digits first should be converted to Latin (i.e. 0  1 2 3 4 5 6 7 8 9 ) and then intval will work fine!
