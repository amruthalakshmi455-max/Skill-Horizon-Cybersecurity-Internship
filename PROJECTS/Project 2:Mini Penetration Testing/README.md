# Project 2: Mini Penetration Testing – DVWA + OWASP Juice Shop

## Overview
This project demonstrates a controlled mini penetration test performed on two intentionally vulnerable web applications: DVWA and OWASP Juice Shop. The objective was to identify, exploit, and compare common web application vulnerabilities using standard penetration testing tools.

## Vulnerabilities Tested
- SQL Injection
- Command Injection
- Broken Authentication (Brute Force)
- Insecure Direct Object References (IDOR)
- Information Disclosure

## Environment
- **OS:** Kali Linux
- **Web Applications:** DVWA, OWASP Juice Shop
- **Hosting:** Localhost (127.0.0.1)
  - DVWA – Apache (Port 80)
  - Juice Shop – Docker (Port 3000)

## Tools Used
- Nmap (Port and service scanning)
- Nikto (Web server vulnerability assessment)
- DIRB (Directory and file enumeration)
- Burp Suite (HTTP request interception and exploitation)

## Key Learning
- How missing security headers and directory listing increase attack surface  
- Differences between beginner-level (DVWA) and real-world logical vulnerabilities (Juice Shop)  
- Importance of input validation, proper authentication, and access controls  
- How tools like Burp Suite can help identify complex vulnerabilities like IDOR  

