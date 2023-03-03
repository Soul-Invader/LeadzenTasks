'''Find the longest palindrome from the given string. Palindrome is a word, phrase, or sequence that reads the
same backwards as forwards, e.g. madam, civic, radar'''
def longestPalindrome(self, s: str) -> str:
    
    def expand_around_center(start,end):
        while start>=0 and end<len(s) and s[start]==s[end]:
            start-=1
            end+=1
        start+=1
        end-=1
        return start,end
    
    start=0
    end=0
    
    for i in range(len(s)):
        start1,end1=expand_around_center(i,i)
        start2,end2=expand_around_center(i,i+1)
        if end1-start1+1>end2-start2+1:
            tend=end1
            tstart=start1
        else:
            tend=end2
            tstart=start2
        if end-start+1<tend-tstart+1:
            start=tstart
            end=tend
            
    
    return s[start:end+1]
