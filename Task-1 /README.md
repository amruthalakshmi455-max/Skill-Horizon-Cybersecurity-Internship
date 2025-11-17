# Task 1 – Environment Setup & Tool Installation

## **1. Install Firefox Browser**

Ensure Firefox is installed on your system.

---

## **2. Install Firefox Add-ons**

Install the following extensions in Firefox:

* Wappalyzer
* BuiltWith
* Cookie Editor
* HTTP Header Live
* DotGit
* LinkGopher
* Knoxss
* JSON Web View
* HackBar
* Hunter.io
* Shodan
* TruffleHog
* User-Agent Switcher
* Retire.js
* TouchVPN
* FoxyProxy Standard

---

## **3. Install Burp Suite**

Download and install Burp Suite on your system.

---

## **4. Configure Burp Suite With Firefox**

### **A. FoxyProxy Configuration**

1. Open **FoxyProxy** in Firefox.
2. Go to **Options → Proxies → Add**.
3. Enter:

   * **Title:** Burp Proxy
   * **Hostname:** 127.0.0.1
   * **Port:** 8080
4. Click **Save**.

### **B. Install Burp Certificate in Firefox**

1. In Burp Suite:

   * Go to **Proxy → Proxy Settings → Import/Export**
   * Export certificate in **DER format**
   * Save the certificate

2. In Firefox:

   * Go to **Settings → search "Certificate"**
   * Click **View Certificates → Import**
   * Select the DER certificate file
   * Confirm & save

---

## **5. Install Go Language in Kali Linux**

Run the following commands:

```sh
sudo apt update
sudo apt install golang-go
go version
```

---

