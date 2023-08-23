import pandas as pd
from mlxtend.preprocessing import TransactionEncoder
from mlxtend.frequent_patterns import apriori, fpmax, fpgrowth
import numpy as np


mydf = pd.read_csv('1574188964.csv')
df = mydf[['Bid from', 'Bid to','Sale Price']]

user_id=6
df_filtered = df.loc[df['Bid from'] == user_id]

df_sorted = df_filtered.sort_values('Sale Price', ascending=False)

top_10 = df_sorted.nlargest(10, 'Sale Price')
print(top_10)

new_df = top_10[['Bid to']]
nparr= np.unique(new_df.values)
#print(type(dataset))

dataset = []
dataset.append(nparr)

for a in nparr:
    print(a)
    user_id=a
    df_filtered1 = df.loc[df['Bid from'] == user_id]
    df_sorted1 = df_filtered1.sort_values('Sale Price', ascending=False)
    top_101 = df_sorted1.nlargest(10, 'Sale Price')
    new_df1 = top_101[['Bid to']]
    nparr1= np.unique(new_df1.values)
    dataset.append(nparr1)
 
print(dataset)

te = TransactionEncoder()
te_ary = te.fit(dataset).transform(dataset)
df = pd.DataFrame(te_ary, columns=te.columns_)
print(df)
frequent_itemsets = fpgrowth(df, min_support=0.4, use_colnames=True)

print(frequent_itemsets)
print("++++++++++++")

from mlxtend.frequent_patterns import association_rules

#rules = association_rules(frequent_itemsets, metric="confidence", min_threshold=1.2)
rules = association_rules(frequent_itemsets, metric="lift", min_threshold=1.2)

print(rules)

#antecedents, consequents, antecedent support, consequent support, support, confidence, lift, leverage, conviction
print(type(rules))
print(rules[['antecedents', 'consequents','antecedent support','consequent support']])
print(rules[['antecedents', 'consequents','support','confidence']])

'''
rules = association_rules(frequent_itemsets, metric="lift", min_threshold=1.2)
print(rules)

rules["antecedent_len"] = rules["antecedents"].apply(lambda x: len(x))
print(rules)

rules[ (rules['antecedent_len'] >= 2) &
       (rules['confidence'] > 0.75) &
       (rules['lift'] > 1.2) ]

rules[rules['antecedents'] == {'Eggs', 'Kidney Beans'}]
rules[rules['antecedents'] == {'Kidney Beans', 'Eggs'}]
rules[rules['antecedents'] == frozenset(('Eggs', 'Kidney Beans'))]
rules[rules['antecedents'] == frozenset(('Kidney Beans', 'Eggs'))]
'''
