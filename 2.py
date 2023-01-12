import sys
from textblob import TextBlob


def tran(text, Runput):
    A = TextBlob(text).sentiment.polarity
    print(A)
    if Runput <= 13:
        switch = 0  # ok
    elif Runput <= 19:
        switch = 1  # light
    elif Runput <= 28:
        switch = 2  # midel
    elif Runput <= 63:
        switch = 3  # hard
    pass
    print(switch)
    if A < 0:
        select = -1  # bad
    elif A > 0.4:
        select = 1  # good
    else:
        select = 0  # natural
    pass
    print(select)


pass

if __name__ == '__main__':
    strt = ''
    for i in sys.argv[1:(len(sys.argv[1:]))]:
        strt += i+' '
    pass
    tran(strt, int(sys.argv[-1]))
pass
