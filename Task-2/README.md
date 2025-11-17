# Task 2 – Installation of Go-Based Recon Tools

This task focuses on installing essential **Go-based reconnaissance tools** used in bug bounty, penetration testing, and asset discovery.

---

## **Prerequisites**

Make sure **Go language** is already installed. Verify using:

```sh
go version
```

---

## **1. Install Subfinder**

Subdomain discovery tool.

```sh
go install -v github.com/projectdiscovery/subfinder/v2/cmd/subfinder@latest
```

---

## **2. Install Assetfinder**

Find domain assets quickly.

```sh
go install github.com/tomnomnom/assetfinder@latest
```

---

## **3. Install AlterX**

Wordlist alteration tool.

```sh
go install -v github.com/projectdiscovery/alterx/cmd/alterx@latest
```

---

## **4. Install Httpx**

Probe HTTP/HTTPS endpoints.

```sh
go install -v github.com/projectdiscovery/httpx/cmd/httpx@latest
```

---

## **5. Install Katana**

Web crawler for URLs.

```sh
go install github.com/projectdiscovery/katana/cmd/katana@latest
```

---

## **6. Install Gau (GetAllUrls)**

Fetch archived URLs from sources.

```sh
go install github.com/lc/gau/v2/cmd/gau@latest
```

---

## **7. Install Fuzzuli**

Fuzzing tool for URL enumeration.

```sh
go install github.com/musana/fuzzuli@latest
```

---

## **8. Install Waybackurls**

Extract URLs from the Wayback Machine.

```sh
go install github.com/tomnomnom/waybackurls@latest
```

---

## **Verification**

Check if binaries are installed correctly:

```sh
ls ~/go/bin
```

You should see:

```
subfinder
assetfinder
alterx
httpx
katana
gau
fuzzuli
waybackurls
```

---

