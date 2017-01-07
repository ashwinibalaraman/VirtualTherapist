reated on Sep 2, 2016
Program : Train and test the model and classify
1. TF-IDF
2. LSA-SVD-Cosine Similarity 
3. Naive Bayes and SVM Classifiers
@author: Ashwini Balaraman
'''

categories = ['depression', 'anxiety']

import sklearn
import numpy as np
import pandas as pd
from time import time
from sklearn.datasets import load_files
from scipy.sparse.linalg import svds

train_data = load_files(container_path='../data/parsed-session-data', description=None, categories=categories, load_content=True, shuffle=True, encoding=None, decode_error='strict', random_state=0)
datalen = len(train_data.data)
print 'data files:', datalen
print 'categories considered:', train_data.target_names


##train_data = train_data[10:]
##for t in train_data.target[:10]:
##    print(train_data.target_names[t])
##print(train_data.target[:10])

from sklearn.feature_extraction.text import CountVectorizer
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.feature_extraction.text import TfidfTransformer
from sklearn.pipeline import Pipeline
from sklearn.decomposition import TruncatedSVD
from sklearn.preprocessing import Normalizer
from sklearn import metrics
from sklearn.cluster import KMeans, MiniBatchKMeans
from sklearn.metrics.pairwise import cosine_similarity
from sklearn.linear_model import SGDClassifier
from sklearn.naive_bayes import MultinomialNB


count_vect = CountVectorizer()
X_train_counts = count_vect.fit_transform(train_data.data)
print 'matrix shape', X_train_counts.shape
print 'word index for depression', count_vect.vocabulary_.get(u'depressed')


tfidf_transformer = TfidfTransformer()
train_data_matrix = tfidf_transformer.fit_transform(X_train_counts)
print 'tf-idf matrix dimensions', train_data_matrix.shape

####LSA SVD Classifier#####
##lsa = TruncatedSVD(500, algorithm = 'arpack')
##dtm_lsa = lsa.fit_transform(train_data_matrix)
##dtm_lsa = Normalizer(copy=False).fit_transform(dtm_lsa)
test_data = load_files(container_path='../data/data-to-classify', description=None, load_content=True, shuffle=True, encoding=None, decode_error='strict', random_state=42)
test_data_matrix = count_vect.transform(test_data.data)

print 'test_data length', len(test_data.data)

U, S, Vt = svds(train_data_matrix, k=500)
from numpy import matrix
V= Vt.transpose()

d_new = test_data_matrix* V* (S**-1)
from sklearn.metrics.pairwise import cosine_similarity
cs = cosine_similarity(d_new, U)

#cs = cosine_similarity(dtm_lsa)
print 'cosine similarity', cs
cs = cs.flatten()
related_docs_indices = np.argsort(cs)[:-5:-1]
print 'top 5 cosine_similarities[related_docs_indices]', cs[related_docs_indices]
top_targets = train_data.target[related_docs_indices]
from collections import Counter
most_common,num_most_common = Counter(top_targets).most_common(1)[0]
print 'Test Data classified as: ', train_data.target_names[most_common]
#print(np.argsort(cs, axis=-1, kind='quicksort', order=None))
    


####SVM#####
test_data = load_files(container_path='../data/parsed-session-data', description=None, categories=categories, load_content=True, shuffle=True, encoding=None, decode_error='strict', random_state=42)

text_clf = Pipeline([('vect', CountVectorizer()), ('tfidf', TfidfTransformer()),('clf', SGDClassifier(loss='hinge', penalty='l2', alpha=1e-3, n_iter=5, random_state=42)),])
_ = text_clf.fit(train_data.data, train_data.target)
predicted = text_clf.predict(test_data.data)
print'SVM accuracy:', np.mean(predicted == test_data.target)

####NB TEST#######
text_clf = Pipeline([('vect', CountVectorizer()), ('tfidf', TfidfTransformer()),('clf', MultinomialNB())])
_ = text_clf.fit(train_data.data, train_data.target)
predicted = text_clf.predict(test_data.data)
print 'Naive Bayes accuracy:', np.mean(predicted == test_data.target)

#####Naive Bayes Classifier######
nb_clf = MultinomialNB().fit(train_data_matrix, train_data.target)

docs_new = ['I feel lonely. I am depressed', 'i feel restless']
X_new_counts = count_vect.transform(docs_new)
X_new_tfidf = tfidf_transformer.transform(X_new_counts)

predicted = nb_clf.predict(X_new_tfidf)

print 'Classifying user input with Naive Bayes:'
for doc, category in zip(docs_new, predicted):
    print('%r => %s' % (doc, train_data.target_names[category]))

#####SVM Classifier######
docs_new = ['I feel lonely. I am depressed', 'i feel restless']

svm_clf = Pipeline([('vect', CountVectorizer()), ('tfidf', TfidfTransformer()),('clf', SGDClassifier(loss='hinge', penalty='l2', alpha=1e-3, n_iter=5, random_state=42)),])
_ = svm_clf.fit(train_data.data, train_data.target)

predicted = svm_clf.predict(docs_new)

print 'Classifying user input with SVM:'
for doc, category in zip(docs_new, predicted):
    print('%r => %s' % (doc, train_data.target_names[category]))
