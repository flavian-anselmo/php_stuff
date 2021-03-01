# To add a new cell, type '# %%'
# To add a new markdown cell, type '# %% [markdown]'
# %%
import re
name_age='''Janice is 22 and Theon is 33 
        Gabriel is 64 and Joey is 21'''
age = re.findall(r'\d{1,2}',name_age)
name = re.findall(r'[A-Z][a-z]*',name_age)
print(age)
print(name)  #all names start with an upper case     


# %%
'''
both the string and the REGEX HAVE THEIR OWN CURSOR 

'''


# %%
import re
def search_word():
    if re.search("inform","we need to inform him with the lates information"):       #if the word inform is in the string return true 
        print("there is inform")
    else:
        print("invaid")    
search_word()        


# %%
import re
str_name=re.findall("inform","we need to inform him with the lates information")
print(str_name)#inform is found twice


# %%
import re 
str="we need to inform him with the latest information"
#use finder iterator 
for i in re.finditer("inform",str):
    got_str=i.span()
    print(got_str)


# %%
import re 
str ="sat, hat ,fat,mat,put"
#match anything that ends with at 
allstr=re.findall("[shfmp]ut",str)
#prints only words that end with at
print(allstr)


# %%
#series of range of characters  
import re 
str="sat,hat,fat,mat"
allstr=re.findall("[^h-m]at",str)
#print only hat and mat since we have a range 
print(allstr)


# %%
food="hat rat mat pat"
regex=re.compile("[r]at")#fetch the word staring with r
food=regex.sub("food",food)#replace the position of rat with food 
print(food)


# %%
randstr='''
            keep the blue flag 
            flying high chelsea 
        '''
print(randstr)        
regex=re.compile("\n")
randstr=regex.sub("",randstr)#replace the \n with white space 
print(randstr)        


# %%
randstr="1,2,3,4,5,5,6"
print("matches",len(re.findall("\d{2}",randstr)))


# %%
#applications of ReGEX
'''
Here we are supposed to verify the phone numbers 
all phone numbers should have 
    -3 starting digits and '-' sign
    -3 middle digits and '-' sign
    -4 digits in the end 
'''
def phone_number_verification():
    phone_No="123-345-5555"  
    
    if re.findall("\d{3}-\d{3}-\d{4}",phone_No):
        print("valid")
    else:
        print("invalid")    
phone_number_verification()    


