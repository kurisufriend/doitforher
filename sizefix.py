from os import listdir, system
for i in listdir("abba"):
    system(f'ffmpeg -i "abba/{i}" -vf scale=iw/2:ih/2 "imgs/{i}"')