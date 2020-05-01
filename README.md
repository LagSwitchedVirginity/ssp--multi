# Signature Selling Platform (ssp--multi)
This whole idea was when I saw people selling their signatures by the month or lifetime.
So I figured why not automate it a bit?

## Modes
- Pure Automation
  - No filtering besides signature size
- Approval and automation
  - Administrators actively approve of signature, user will be contacted
  - If this signature is submitted again AFTER being approved, will go through after payment is verified. Will be approved every time in the future. (That's the automation bit)

### Approval system
- On approval
  1. Keeps file hash in database.
  2. Contacts submitter stating it was approved.
  3. Allows file to be automatically accepted in the future.
- On disapproval
  1. Deletes file.
  2. Contacts submitter stating it was disapproved.
  3. Doesn't allow file any time in future. (optional, hash checked)

## To-Do
- Modes
  - [ ] Pure Automation
  - [ ] Approval and automation system
- Pay System
  - [ ] Shoppy.gg - Pure Automation only
  - [ ] BitPay - All
- Display System
  - [ ] Default Signature
  - [ ] Signature Size Requirement (configurable)
  - [ ] Immediate
  - [ ] Queue