# Project 3: Automated vs. Manual Testing

## Overview
This project compares automated vulnerability scanning tools with manual penetration testing techniques using the Damn Vulnerable Web Application (DVWA). The objective is to identify which security issues are detected by automated scanners and which require manual testing and exploitation.

## Tools Tested
- Nikto  
- OWASP ZAP  
- sqlmap  
- Burp Suite  

## Vulnerabilities Tested
- SQL Injection (Boolean-based)  
- SQL Injection (Time-based Blind)  
- SQL Injection (UNION-based)  
- Security Misconfigurations  
- Missing Security Headers  

## Environment
- **OS:** Kali Linux  
- **Web Application:** Damn Vulnerable Web Application (DVWA)  
- **Target URL:** http://127.0.0.1/DVWA  

## Key Learning
- Automated scanners are effective for detecting misconfigurations and missing security headers  
- SQL Injection often requires manual testing and understanding of application logic  
- sqlmap is powerful but still depends on identifying vulnerable input parameters  
- Manual testing enables deeper exploitation with fewer false positives  
- Combining automated and manual testing provides the most reliable security assessment  

